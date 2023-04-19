<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Client;
use Mockery\Generator\StringManipulation\Pass\Pass;

class SaveController extends Controller
{
    public function __construct(User $user, Request $request)
    {
        $this->user = $user;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this -> user -> all();

        return response()->json($data);
    }

    public function save(Request $request)
    {   
        $dataForm = $request -> all();

        $data = $dataForm["GitHub_Username"];

        $client = new Client();

        $link = sprintf("https://api.github.com/users/%s", $dataForm["GitHub_Username"]);

        $resposta = $client->request(
            'GET',
            $link
        );

        $data = json_decode($resposta->getBody(), true);

        $img = file_get_contents($data["avatar_url"]);

        $imgCod = base64_encode($img);

        $userGit = array(
            "Login" => $data["login"], 
            "Nome" => $data["name"],
            "Imagem" => $imgCod, 
            "DataDeRegistro" => $data["created_at"], 
            "QuantRepos" => $data["public_repos"]
        );

        try {
            $data = $this -> user -> create($userGit);
        } catch (\Throwable $th) {

            $error = array(
                "Exceção capturada" => "Esse Usuário já existe"
            );

            if (strpos($th, "users.users_login_unique")) {

                return response()->json($error, 423);

            }
        }

        return response()->json($userGit, 201);
    }
}

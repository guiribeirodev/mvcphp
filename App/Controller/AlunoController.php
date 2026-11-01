<?php

namespace App\Controller;

use App\Model\Aluno;

final class AlunoController
{
    public static function cadastro() : void
    {
        echo "Página de cadastro de alunos";

        $model = new Aluno();
        // $model->id = 8;
        $model->nome = "Gui";
        $model->ra = 123;
        $model->curso = "ADS";
        $model->save();
        echo "aluno inserido";
    }

    public static function listar() : void
    {
        $aluno = new Aluno();
        $lista = $aluno->getAllRows();

        var_dump($lista);
    }
}
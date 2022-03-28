<?php

namespace App\Http\Controllers;

use App\Models\Jogadores;
use App\Models\Jogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro-novo-jogo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request) {
            $novoJogo = new Jogo();
            $data = date('d-m', strtotime($request->data));
            $horario = $request->horario;
            $local = $request->local;
            $key = uniqid();
            $keyHashed = Hash::make($key);

            $novoJogo->key = $key;
            $novoJogo->data = $request->data;
            $novoJogo->horario = $request->horario;
            $novoJogo->duracao = $request->duracao;
            $novoJogo->tipo_campo = $request->tipo_campo;
            $novoJogo->valor = $request->valor;
            $novoJogo->goleiro_de_aluguel = $request->goleiro_de_aluguel;
            $novoJogo->valor_goleiro_de_aluguel = $request->valor_goleiro_de_aluguel;
            $novoJogo->local = $request->local;
            $novoJogo->frequencia = 1;
            $novoJogo->save();

            return view('confirmacao-novo-jogo', compact('local', 'horario', 'data', 'key'));
        } else {
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function confirmarPresenca()
    {
        return view('inserir-codigo-e-nome');
    }

    public function buscarJogo(Request $request)
    {
        if ($request->name) {
            $keyReceived = $request->id;
            $nameReceived = $request->name;
            if ($keyReceived && $nameReceived) {
                $dadosJogo = Jogo::where(['key' => $keyReceived])->first();
                if ($dadosJogo) {
                    return view('resultado-busca-key', compact('keyReceived', 'nameReceived', 'dadosJogo'));
                }else{
                    return view('nao-encontrado');
                }
            } else {

                return view('nao-encontrado');
            }
        } else {
            $keyReceived = $request->key;
            $dadosJogo = Jogo::where(['key' => $keyReceived])->first();
            if ($dadosJogo) {
                $jogadores = Jogadores::where(['key' => $keyReceived])->get();
                $qntJogadores = count($jogadores);
                $dadosJogo = Jogo::where(['key' => $keyReceived])->first();
                $valorEstimado = $dadosJogo->goleiro_de_aluguel ? ($dadosJogo->valor + $dadosJogo->valor_goleiro_de_aluguel) / $qntJogadores : ($dadosJogo->valor) / $qntJogadores;

                return view('confirmacao-e-dados', compact('dadosJogo', 'jogadores', 'valorEstimado'));
            } else {
                return view('nao-encontrado');
            }
        }
    }

    public function confirmarEscalacao(Request $request)
    {
        $keyReceived = $request->key;
        $nameReceived = $request->name;

        $dadosJogador = new Jogadores();
        $dadosJogador->key = $keyReceived;
        $dadosJogador->nome_jogador = $nameReceived;
        $dadosJogador->save();

        $jogadores = Jogadores::where(['key' => $keyReceived])->get();
        $qntJogadores = count($jogadores);
        $dadosJogo = Jogo::where(['key' => $keyReceived])->first();

        $valorEstimado = $dadosJogo->goleiro_de_aluguel ? ($dadosJogo->valor + $dadosJogo->valor_goleiro_de_aluguel) / $qntJogadores : ($dadosJogo->valor) / $qntJogadores;

        return view('confirmacao-e-dados', compact('keyReceived', 'dadosJogo', 'jogadores', 'valorEstimado'));
    }

    public function statusJogo(Request $request)
    {
        return view('buscar-status-do-jogo');
    }
}

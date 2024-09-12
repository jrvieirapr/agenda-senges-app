<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use App\Models\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Função da pagina inicial do meu dominio
        //Vou buscar no banco de dados todos os meus itens
        //Select * from eventos;
        $eventos = Evento::all();
        //posso aplicar outras regras de negocio
        //retornar alguma coisa para o cliente
        return view('eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //carregar itens realacionados como "pais"
        //e passar para a pagina de criação do modelo
        //$categorias = Categoria:all()
        //return view('produtos.create,compact('categorias'));
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventoRequest $request)
    {
        //Esta função salva no banco de dados
        //Se tiver o Store Request valida antes de chegar aqui
        //Request $request precisa validar aqui
        //Criar o Evento   
        //insert in Evento ('data','descricao') values('2024-09-10','Hora do almoco');     
        Evento::create($request->all());
        //redirecionar para o rota do index 
        //com mensagem de sucesso
        return redirect()->route('eventos.index')
        ->with('success', 'Evento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //voce receber um modelo e vai mostrar na tela
        // ou vai receber uma $id e vai consular para depois mostrar
        //$evento = Evento::find($id);
        return view('eventos.show',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //Mesma situação de retorno do show
        //diferença que voce vai retornar para um formulario
        return view('eventos.edit',compact('evento'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventoRequest $request, Evento $evento)
    {
        //Eu vou alterar o conteudo do evento.
        //Se receber $id devo consultar antes de alterar
        //$evento = Evento::find($id)
        //faço a troca de conteudo
        //$descircao = $request['descricao']
        $evento->update($request->all());
        //redirecionar para o index
        return redirect()->route('eventos.index')
        ->with('success', 'Evento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //Destruir ou deletar o registro
        //se receber $id tem que pesquisar
        //temos o delete que remove do banco
        //temos o softdelete que oculta o dado
        $evento->delete();
        //redirecionar para o index
        return redirect()->route('eventos.index')
        ->with('success', 'Evento removido com sucesso!');

    }
}

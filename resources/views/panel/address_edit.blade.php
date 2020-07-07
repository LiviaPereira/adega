@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="css/panel.css">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li><a href="/orders">PEDIDOS</a></li>
                            <li class="active"><a href="/address">ENDEREÇOS</a></li>
                            <li><a href="/account_edit">CONTA</a></li>
                            <li id="logout"><a href="">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <div class="address">
                        <strong>Alterar Endereço de Entrega</strong>
                        <br>
                        <br>
                        <div class="form-address-edit">
                            <form action="" method="post"></form>
                                <div>
                                    <label for="endereco">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" required>
                                </div>
                                <div>
                                    <label for="numero">Número</label>
                                    <input type="text" name="numero" id="numero" required>
                                </div>
                                <div>
                                    <label for="complemento">Complemento</label>
                                    <input type="text" name="complemento" id="complemento" required>
                                </div>
                                <div>
                                    <label for="cep">CEP</label>
                                    <input type="text" name="cep" id="cep" required>
                                </div>
                                <div>
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" id="bairro" required>
                                </div>
                                <div>
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" id="cidade" required>
                                </div>
                                <br>
                                <div class="register-submit">
                                    <button type="submit">Salvar Alterações</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>

@endsection
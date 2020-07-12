@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/panel.css') }}">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li><a href="/panel/orders">PEDIDOS</a></li>
                            <li><a href="/panel/address">ENDEREÇOS</a></li>
                            <li class="active"><a href="/panel/account_edit">CONTA</a></li>
                            <li id="logout"><a href="/logout">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <div class="account">
                        <strong>Alterar Informações de Cadastro</strong>
                            <br>
                            <br>
                        <div class="form-address-edit">
                            <form action="" method="post"></form>
                                <div>
                                    <label for="logradouro">Nome:</label>
                                    <input type="text" name="logradouro" id="logradouro" required>
                                </div>
                                <div>
                                    <label for="endereco">E-mail:</label>
                                    <input type="text" name="endereco" id="endereco" required>
                                </div>
                                <div>
                                    <label for="numero">CPF:</label>
                                    <input type="text" name="numero" id="numero" required>
                                </div>
                                <div>
                                    <label for="complemento">Data de Nascimento:</label>
                                    <input type="text" name="complemento" id="complemento" required>
                                </div>
                                <div>
                                    <label for="cep">Telefone:</label>
                                    <input type="text" name="cep" id="cep" required>
                                </div>
                                <div>
                                    <label for="novidades">Newsletter:</label>
                                    <select name="novidades" id="novidades">
                                        <option value="true">Sim</option>
                                        <option value="false">Não</option>
                                    </select>
                                </div>
                                <br>
                                <fieldset>
                                    <legend>Alterar Senha</legend>
                                    <p>Para alterar, preencha os campos abaixo.</p>
                                    <p>Para manter a atual, deixe-os em branco.</p>
                                    <div>
                                        <label for="senha">Senha Atual:</label>
                                        <input type="password" name="senha" id="senha" required>
                                    </div>
                                    <div>
                                        <label for="senha_nova">Nova Senha:</label>
                                        <input type="password" name="senha_nova" id="senha_nova" required>
                                    </div>
                                    <div>
                                        <label for="senha_confirma">Confirmar Nova Senha:</label>
                                        <input type="password" name="senha_confirma" id="senha_confirma" required>
                                    </div>
                                </fieldset>
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
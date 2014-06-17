<div id="middle" class="wrapper">
        <div class="titulo">
            <h1>Marcação de Consulta</h1>
        </div>
        <div>
            <div id="container" class="has_shadows b_corners t_corners has_borders">
                <form action='<?php echo CONTROLLERS_DIR."validar_login.php"?>' method="post">
                    <div class="content-row">
                        <div class="content-row">
                            <div class="content">
                                <fieldset>
                                    <legend>
                                        <span>Dados Pessoais</span>
                                    </legend>
                                    <div class="content-text">
                                        <div class="content">
                                            <table>
                                                <tr>
                                                    <td class="left required">Nome Completo:</td>
                                                    <td>
                                                        <input class="big_input" type="text" name="nome" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">Data de Nascimento:</td>
                                                    <td>
                                                        <input type="date" id="datepicker" name="datanascimento">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        Sexo:
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="sexo" value="Masculino" checked="checked" />Masculino
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="radio" name="sexo" value="Feminino" />Feminino</td>
                                                </tr>
                                                                                                <tr>
                                                    <td class="left">Nacionalidade:</td>
                                                    <td>
                                                        <input type="text" name="nacionalidade" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <td class="left">Morada:</td>
                                                    <td>
                                                        <input class="big_input" type="text" name="morada" />
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td class="left">Codigo Postal:</td>
                                                    <td>
                                                        <input type="text" name="postal" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">Cidade:</td>
                                                    <td>
                                                        <input class="text" type="text" name="cidade" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">Email:</td>
                                                    <td>
                                                        <input type="text" name="email" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">Confirmar Email:</td>
                                                    <td>
                                                        <input type="text" name="email1" />
                                                    </td>
                                                </tr>                                                                                                           <tr>
                                                    <td class="left">Password:</td>
                                                    <td>
                                                        <input type="text" name="password" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">Confirmar Password:</td>
                                                    <td>
                                                        <input type="text" name="password1" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">Numero Contribuinte</td>
                                                    <td>
                                                        <input type="number" name="contribuinte" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        BI/CC:
                                                    </td>
                                                    <td>
                                                        <input type="number" name="bi" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        Telemóvel:
                                                    </td>
                                                    <td>
                                                        <input type="number" name="telemovel" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        Telefone Fixo:
                                                    </td>
                                                    <td>
                                                        <input type="number" name="fixo" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        Seguro Nacional de Saude:
                                                    </td>
                                                    <td>
                                                        <input type="number" name="sns" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="submit" value="Enviar" />
                                                        <input type="reset" value="Cancelar" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

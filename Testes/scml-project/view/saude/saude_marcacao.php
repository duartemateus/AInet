<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Marcação de Consulta</h1>
    </div>
    <div>
        <div id="container" class="has_shadows b_corners t_corners has_borders">
            <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>' method="post">
                <div class="content-row">
                    <div class="content">
                        <fieldset class="title">
                            <legend>
                                <span>Consulta</span>
                            </legend>
                            <div class="content-text">
                                <div class="content">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <p>Data da Consulta:</p>
                                            </td>
                                            <td>
                                                <input type="text" id="dateconsulta">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">Especialidade:</td>
                                            <td>
                                                <select name="especialidade">
                                                    <?php
                                                    foreach ($especialidade as $row){
                                                        echo '<option value="' . $row['name'] . '">' . $row['short_name'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">Seguradora:</td>
                                            <td>
                                                <select name="seguradora">
                                                    <?php
                                                    foreach ($seguradora as $row){
                                                        echo '<option value="' . $row['short_name'] . '">' . $row['short_name'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="content-row">
                        <div class="content">
                            <fieldset class="title">
                                <legend>
                                    <span>Dados Pessoais</span>
                                </legend>
                                <div class="content-text">
                                    <div class="content">
                                        <table>
                                            <tr>
                                                <td class="left required">Nome Completo:</td>
                                                <td>
                                                    <input class="big_input" type="text" name="first" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    Sexo:
                                                </td>
                                                <td>
                                                    <input type="radio" name="sexo" value="masculino" checked="checked" />Masculino
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="radio" name="sexo" value="feminino" />Feminino</td>
                                            </tr>
                                            <tr>
                                                <td class="left">Estado Civil:</td>
                                                <td>
                                                    <select name="characters">
                                                        <option value="solteiro">Solteiro</option>
                                                        <option value="casado">Casado</option>
                                                        <option value="divorciado">Divorciado</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">Data de Nascimento:</td>
                                                <td>
                                                    <input type="text" id="datepicker">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">Morada:</td>
                                                <td>
                                                    <input class="big_input" type="text" name="morada" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">Número de contacto:</td>
                                                <td>
                                                    <input type="text" name="telefone" />
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
                                                    <input type="text" name="email" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    BI/CC:
                                                </td>
                                                <td>
                                                    <input type="text" name="BI" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">Numero Contribuinte:</td>
                                                <td>
                                                    <input type="text" name="contribuinte" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="areatexto">Observações:</td>
                                                <td>
                                                    <textarea name="comments"></textarea>
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
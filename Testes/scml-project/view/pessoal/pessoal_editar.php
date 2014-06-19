<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Alterar Dados</h1>
    </div>
    <div>
        <div id="container" class="has_shadows b_corners t_corners has_borders">
            <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="post">
                <div class="content-row">
                    <fieldset class="title">
                        <legend>
                            <span>Dados da Conta</span>
                        </legend>
                        <div class="content-text">
                            <div class="content">
                                <table>
                                    <tr>
                                        <td class="left">Email:</td>
                                        <td>
                                            <input class="medium" type="text" name="email" pattern=".{6,80}" value="<?php echo (!empty($user['email'])) ? $user['email'] : "";?>" required/><span>eg. email@example.com</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">Confirmar Email:</td>
                                        <td>
                                            <input class="medium" type="text" value="" name="email1" pattern=".{6,80}" required/><span>eg. email@example.com</span>
                                        </td>
                                    </tr>                                                                                                           <tr>
                                        <td class="left">Password:</td>
                                        <td>
                                            <input type="password" name="password" pattern=".{6,24}" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">Confirmar Password:</td>
                                        <td>
                                            <input type="password" name="password1" pattern=".{6,24}" required/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <br/>
                <div class="content-row">
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
                                            <input class="big" type="text" name="nome" pattern="[A-Za-z]{5,}" value="<?php echo (!empty($user['name'])) ? $user['name'] : "";?>" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">Data de Nascimento:</td>
                                        <td>
                                            <input type="date" value="<?php echo (!empty($user['date_of_birth'])) ? $user['date_of_birth'] : "";?>" id="datepicker" name="datanascimento"><span>(dd/mm/aaaa)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            Sexo:
                                        </td>
                                        <td>
                                            <p><input type="radio" name="sexo" value="Masculino" checked="checked" />Masculino</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <p><input type="radio" name="sexo" value="Feminino" />Feminino</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">Nacionalidade:</td>
                                        <td>
                                            <input type="text" value="<?php echo (!empty($user['nationality'])) ? $user['nationality'] : "";?>" name="nacionalidade" pattern="[A-Za-z]{5,}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">Morada:</td>
                                        <td>
                                            <input class="big" value="<?php echo (!empty($user['address'])) ? $user['address'] : "";?>" type="text" name="morada" pattern="[A-Za-z]{5,}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">Codigo Postal:</td>
                                        <td>
                                            <input type="text" value="<?php echo (!empty($user['post_code'])) ? $user['post_code'] : "";?>" name="postal" pattern="[1-9]{4}\-[1-9]{3}"/><span>(1234-567)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">Cidade:</td>
                                        <td>
                                            <input class="text" value="<?php echo (!empty($user['city'])) ? $user['city'] : "";?>" type="text" name="cidade" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="left">Numero Contribuinte</td>
                                        <td>
                                            <input type="number" value="<?php echo (!empty($user['fiscal_id'])) ? $user['fiscal_id'] : "";?>" name="contribuinte" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            BI/CC:
                                        </td>
                                        <td>
                                            <input type="number" value="<?php echo (!empty($user['civil_id'])) ? $user['civil_id'] : "";?>" name="bi" pattern=".{8}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            Telemóvel:
                                        </td>
                                        <td>
                                            <input type="text" value="<?php echo (!empty($user['mobile_phone'])) ? $user['mobile_phone'] : "";?>" name="telemovel" pattern="[9][0-9]{8}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            Telefone Fixo:
                                        </td>
                                        <td>
                                            <input type="number" value="<?php echo (!empty($user['phone'])) ? $user['phone'] : "";?>" name="fixo" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            Seguro Nacional de Saude:
                                        </td>
                                        <td>
                                            <input type="number" value="<?php echo (!empty($user['sns'])) ? $user['sns'] : "";?>" name="sns" />
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
            </form>
        </div>
    </div>
</div>

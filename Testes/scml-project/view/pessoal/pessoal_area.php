<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Dados Pessoais</h1>
    </div>
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
                                <text class="big" name="nome" required/><span><?php echo (!empty($person['name'])) ? $person['name'] : "";?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="left">Email:</td>
                            <td>
                                <text class="medium" name="email" required/><span><?php echo (!empty($person[''])) ? $person['email'] : "";?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="left">Data de Nascimento:</td>
                            <td>
                                <text id="datepicker" name="datanascimento"><span><?php echo (!empty($person['date_of_birth'])) ? $person['date_of_birth'] : "";?></span>
                                    </td>
                        </tr>
                        <tr>
                            <td class="left">
                                Sexo:
                            </td>
                            <td>
                                <text name="sexo"  checked="checked" /><span><?php echo (!empty($person['gender'])) ? $person['gender'] : "";?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="left">Nacionalidade:</td>
                            <td>
                                <text name="nacionalidade" /><span><?php echo (!empty($person['nationality'])) ? $person['nationality'] : "";?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="left">Morada:</td>
                            <td>
                                <text class="big" name="morada" /><span><?php echo (!empty($person['address'])) ? $person['address'] : "";?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="left">Codigo Postal:</td>
                            <td>
                                <text name="postal" /><span><?php echo (!empty($person['post_code'])) ? $person['post_code'] : "";?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="left">Cidade:</td>
                            <td>
                                <text class="text" name="cidade" /><?php echo (!empty($person['city'])) ? $person['city'] : "";?></span>
                        </td>
                    </tr>

                <tr>
                    <td class="left">Numero Contribuinte</td>
                    <td>
                        <text name="contribuinte" /><span><?php echo (!empty($person['fiscal_id'])) ? $person['fiscal_id'] : "";?></span>
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        BI/CC:
                    </td>
                    <td>
                        <text name="bi" pattern=".{8}"/><span><?php echo (!empty($person['civil_id'])) ? $person['civil_id'] : "";?></span>  
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        Telemóvel:
                    </td>
                    <td>
                        <text name="telemovel"/><span><?php echo (!empty($person['mobile_phone'])) ? $person['mobile_phone'] : "";?></span>
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        Telefone Fixo:
                    </td>
                    <td>
                        <text name="fixo" /><span><?php echo (!empty($person['phone'])) ? $person['phone'] : "";?></span>
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        Seguro Nacional de Saude:
                    </td>
                    <td>
                        <text name="sns" /><span><?php echo (!empty($person['sns'])) ? $person['sns'] : "";?></span>
                    </td>
                </tr>
                </table>
            </div>
    </div>
    </fieldset>
</div>
</div>
</div>
</div>
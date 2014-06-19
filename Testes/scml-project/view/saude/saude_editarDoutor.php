<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Editar Dados Médico</h1>
    </div>
    <div>
        <div id="container">
            <div class="content-row">
                <fieldset class="title">
                    <legend>
                        <span>Dados Médico</span>
                    </legend>
                    <div class="content-text">
                        <div class="content-row cf">
                            <div class="content-left">
                                <div class="content-row">
                                    <div class="content">
                                        <table>
                                            <tr>
                                                <td class="left required">Alcunha:</td>
                                                <td>
                                                    <input class="big" type="text" name="alcunha" value="<?php echo $informacao_doutor[$id_doutor]['doctor_name'] ?>" pattern="[A-Za-z\s]{5,}" required/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">Especialidades:</td>
                                                <td>
                                                    <select id="select_opt_speciality" name="select_opt_speciality">
                                                        <?php
                                                        foreach ($areas_clinicas as $row) {
                                                            echo "<option value='0'>" . $row['short_name'] . "</option> \n";
                                                        }
                                                        ?>
                                                    </select>
                                                    <textarea disabled="" type="text" name="horarios"> </textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">Periodos de consulta:</td>
                                                <td>
                                                    <select id="select_opt_speciality_horario" name="select_opt_speciality_horario">
                                                        <?php
                                                        foreach ($areas_clinicas as $row) {
                                                            echo "<option value='0'>" . $row['short_name'] . "</option> \n";
                                                        }
                                                        echo "</select>";
                                                        $specialty = explode(", ", $row['specialty_name']);
                                                        $count = count($availability);
                                                        echo "<textarea type='text' name='horarios' value=''> </textarea>";
                                                        for ($i = 0; $i < $count; $i++) {
                                                            echo "<p class='seta'>" . $specialty[$i] . " - " . $availability[$i] . "</p>";
                                                        }
                                                        ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="submit" value="Confirmar" />
                                                    <input type="reset" value="Cancelar" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="content-right">
                                <div class="content-row">
                                    <div class="content">
                                        <p>Alterar imagem perfil:</p>
                                        <hr/>
                                        <img id="uploadPreview" class="preview" />
                                        <input id="uploadImage" type="file" name="myPhoto" onchange="previewImage();" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>

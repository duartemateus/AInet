<?php if(!isset($firstnavbar)){ $firstnavbar=0; } ?>

<div id="logo">
    <div class="wrapper">
        <div class="imageholder">
            <a href="./index.php">
                <img src="../../scm-imagens/santa.png" alt="">
            </a>
        </div>
    </div>
</div>
<div id="firstnavbar" class="">
    <div class="wrapper">
        <div id="imagesholder">
            <!-- 2 divs por imagem -->
            <a <?php echo $firstnavbar==1 ? 'class="active" ': '';?>href="../saude/areas-clinicas.php">
                <div class="imageholder">
                    <div>
                        <h1>Saúde</h1>
                    </div>
                </div>
            </a>
            <a <?php echo $firstnavbar==2 ? 'class="active" ': '';?>href="../cuidados/cuidados.php">
                <div class="imageholder">
                    <div>
                        <h1>Cuidados Geriátricos</h1>
                    </div>
                </div>
            </a>
            <a <?php echo $firstnavbar==3 ? 'class="active" ': '';?>href="../creche/creche.php">
                <div class="imageholder">
                    <div>
                        <h1>Creche</h1>
                    </div>
                </div>
            </a>
            <a <?php echo $firstnavbar==4 ? 'class="active" ': '';?>href="../irmandade/irmandade.php">
                <div class="imageholder">
                    <div>
                        <h1>Irmandade</h1>
                    </div>
                </div>
            </a>
            <a <?php echo $firstnavbar==5 ? 'class="active" ': '';?>href="../contactos/contactos.php">
                <div class="imageholder">
                    <div>
                        <h1>Contactos</h1>
                    </div>
                </div>
            </a>
            <a <?php echo $firstnavbar==6 ? 'class="active" ': '';?>href="../areapessoal/areapessoal.php">
                <div class="imageholder">
                    <div>
                        <h1>Área Pessoal</h1>
                    </div>
                </div>
            </a>
            <a <?php echo $firstnavbar==7 ? 'class="active" ': '';?>href="../admin/admin.php">
                <div class="imageholder">
                    <div>
                        <h1>Administração</h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php
require_once('header/header.php');
?>
<form action="orcamento.php" method="POST">
    <div class="container">
        <div class="row-fluid ">
            <div class="col-sm-4 ">
                <label>TV 32 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv32">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv32">
                </div>
                <label>TV 40 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv40">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv40">
                </div>
                <label>TV 43 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv43">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv43">
                </div>
                <label>TV 49 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv49">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv49">
                </div>
                <label>TV 50 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv50">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv50">
                </div>
                <label>TV 55 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv55">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv55">
                </div>
                <label>TV 58 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv58">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv58">
                </div>
                <label>TV 65 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv65">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv65">
                </div>
                <label>TV 75 polegadas:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTv75">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTv75">
                </div>
                <label>Monitor LFD (tamanho definido por projeto):</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeMonitorLFD">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTvMonitorLFD">
                </div>
                <label>Monitor Video Wall:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeMonitorVideoWall">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTvMonitorVideoWall">
                </div>
                <label>Player Alphasignage:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadePlayerAlphasignage">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorPlayerAlphasignage">
                </div>
                <label>Player Alphasignage Secundário:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadePlayerAlphasignageSecundario">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorPlayerAlphasignageSecundario">
                </div>
                <label>TV Box:</label>
                <div class="input-field col s2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="Quantidade" class="validate" name="quantidadeTvBox">
                </div>
                <div class="input-field col s2">
                    <label>Valor unitário</label>
                    <input type="number" placeholder="Valor unitário" class="validate" name="valorTvBox">
                </div>
                <div class="input-field col s2">
                    <label>Valor mão de obra e instalação:</label>
                    <input type="number" placeholder="Valor mão de obra instalação" class="validate" name="maoObraInstalacao">
                </div>
                <div class="input-field col s2">
                    <select requerid name="quantidadeLicenca" id="quantidadeLicenca">
                            <option value="" disabled selected>Quantidade de licenças:</option>
                            <option value="zero">0</option>
                            <option value="um">1</option>
                            <option value="dez">10</option>
                            <option value="quinze">15</option>
                            <option value="vinte">20</option>
                            <option value="trinta">30</option>
                            <option value="quarenta">40</option>
                            <option value="sessenta">60</option>
                            <option value="cem">100</option>
                        </select><span>* Obrigatório selecionar</span>
                </div>
                <div class="input-field col s2">
                    <select required name="formaPagamento" id="formaPagamento">
                            <option value="" disabled selected>Forma de pagamento:</option>
                            <option value="anual">Anual</option>
                            <option value="mensal">Mensal</option>
                        </select><span>* Obrigatório selecionar</span>
                </div>
                <div class="input-field col s2">
                    <select required name="plano" id="plano">
                            <option value="" disabled selected>Seleciona um plano:</option>
                            <option value="bronze">Plano Bronze</option>
                            <option value="prata">Plano Prata</option>
                            <option value="ouro">Plano Ouro</option>
                            <option value="diamante">Plano Diamante</option>
                        </select><span>* Obrigatório selecionar</span>
                </div>
                <div class="input-field col s2">
                    <button class="waves-effect waves-light btn" type="submit" value="calcular" name="calcular">Calcular</button>
                </div>

            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('select').formSelect();
        $('.sidenav').sidenav();
    });
</script>
<?php
require_once('footer/footer.php');
?>
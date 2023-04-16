<main class="container container-conversor">
    <div class="container-title-page">
        <h1 class="fs-1 text-center">Conversor de monedas</h1>
    </div>
    <div class="container container-fluid content-page">
        <div class="container-form">
            <form class="form" method="post">
                <div>
                    <label>Selecciona tu divisa</label>
                    <select id="initialmoney" name="initialMoney" class="form-control">
                        <option value="dollar">$</option>
                        <option value="euro">€</option>
                        <option value="pound">£</option>
                    </select>
                </div>
                <div>
                    <label>Selecciona la divisa a la que quieres convertir tu dinero</label>
                    <select id="finalmoney" name="finalMoney" class="form-control">
                        <option value="dollar">$</option>
                        <option value="euro">€</option>
                        <option value="pound">£</option>
                    </select>
                </div>
                <div>
                    <label for="initialvalue">Valor de divisa inicial</label>
                    <input id="initialvalue" type="text" name="initial_value" placeholder="Introduce el valor inicial" class="form-control" />
                </div>
                <div>
                    <label for="finalvalue">Conversión Divisa</label>
                    <input id="finalvalue" type="text" value="" name="final_value" readonly class="form-control" />
                </div>
                <div class="w-100 grid justify-content-center">
                    <input type="submit" value="Convertir" class="btn btn-primary m-auto" />
                </div>

            </form>
        </div>
    </div>
</main>
<form method="get" id="calc">
    <table>
        <tr>
            <td>Bil1</td>
            <td><input class="bil1" type="number"></td>
        </tr>
        <tr>
            <td>Operator</td>
            <td><select class="opt" required name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">:</option>
                </select></td>
        </tr>
        <tr>
            <td>Bil2</td>
            <td><input class="bil2" required type="number"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Hitung</button></td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td class="hasil"></td>
        </tr>
        <tr>
            <td>History</td>
            <td class="history"></td>
        </tr>
    </table>
</form>
<script>
    var historys = ""
    var hasil = 0
    document.getElementById("calc").addEventListener("submit", function(e) {
        e.preventDefault()
        // let bil1 = parseInt(document.querySelector(".bil1").value)
        let bil2 = parseInt(document.querySelector(".bil2").value)
        let select = document.querySelector(".opt")
        opt = select.options[select.selectedIndex].value

        if (opt == "tambah") {
            hasil += bil2;
            historys = " " + bil2 + " +" + historys
        }
        if (opt == "kurang") {
            hasil -= bil2;
            historys = " " + bil2 + " -" + historys
        }
        if (opt == "kali") {
            hasil *= bil2;
            historys = " " + bil2 + " *" + historys
        }
        if (opt == "bagi") {
            hasil /= bil2;
            historys = " " + bil2 + " :" + historys
        }

        historyX = historys.slice( 0 , -1);
        
        document.querySelector(".hasil").innerHTML = hasil
        document.querySelector(".history").innerHTML = historyX
    })
</script>
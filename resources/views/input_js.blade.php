<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-input">
        <form action="" method="post" class="form-inputs">
            <label for="input">Jumlah Input</label><br>
            <input type="text" name="input" id="input"><br>
            <button>Submit</button>
        </form>
    </div>
    <div class="container-dynamic">
    </div>
    <div class="container-button">
    </div>
    <div class="container-tabel">
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>Mapel</th>
                    <th>Jam</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody class="isi">
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function(){
            let nilai = new Array(),mapel = new Array(),jam = new Array(),hasil = new Array()
            $('.container-tabel').css("display","none")
            $('.container-input').on('submit','.form-inputs',function(e){
            e.preventDefault()
            $('.container-dynamic').empty()
            $('.container-tabel').css("display","none")
            $('.isi').empty()
            for (let index = 1; index <= $('#input').val(); index++) {
                $('.container-dynamic').append(`
                <label for="mapel${index}">Mapel${index}</label>
                <input type="text" name="mapel${index}" id="mapel${index}">
                <label for="jam${index}">Jam Mapel${index}</label>
                <input type="text" name="jam${index}" id="jam${index}">
                <label for="nilai${index}">nilai Mapel${index}</label>
                <input type="text" name="nilai${index}" id="nilai${index}">
                <br>
                `)
            }
            $('.container-button').empty()
            $('.container-button').append('<button id="kirim">Kirim</button>')
            })
            $('.container-button').on('click','#kirim',function(){
                for (let index = 1; index <= $('#input').val(); index++) {
                    if ($(`#nilai${index}`).val() === "A") {
                    hasil[index] = 100;
                } else if ($(`#nilai${index}`).val() === "B") {
                    hasil[index] = 80;
                } else if ($(`#nilai${index}`).val() === "C") {
                    hasil[index] = 60;
                } else if ($(`#nilai${index}`).val() === "D") {
                    hasil[index] = 40;
                } else if ($(`#nilai${index}`).val() === "E") {
                    hasil[index] = 20;
                } else if ($(`#nilai${index}`).val() === "F") {
                    hasil[index] = 0;
                }
                    mapel[index] = $(`#mapel${index}`).val()
                    jam[index] = $(`#jam${index}`).val()
                    nilai[index] = $(`#nilai${index}`).val()
                }
                //bagian tabel
                $('.container-tabel').css("display","block")
                $('.isi').empty()
                for (let index = 1; index <= $('#input').val(); index++) {
                    $('.isi').append(`
                    <tr class="tabel${index}">
                        <td>${mapel[index]}</td>
                        <td>${jam[index]}</td>
                        <td>${nilai[index]}</td>
                    </tr>
                    `)
                }
                $('.isi').append(`
                <tr>
                        <td colspan="3">${hasil.reduce((a, b) => a + b, 0) / $('#input').val()}</td>
                </tr>
                `)
            })
        ///
        })
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <title>Document</title>
</head>

<body>


    <table class="col-10 border border-primary rounded mt-5">
        <tr>
            <td class="border border-dark p-3 w-25">
                <p class="text-center">Adatok</p> 
                <form action="index.php?regisztraciok=true" class="form-group" method="POST">
                    <label for="name">Név:</label>
                    <input type="text" name="name" class="form-control">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control">
                    <label for="bdate">Születési idő:</label>
                    <input type="date" name="bdate" class="form-control">
                    <label for="sex">Nem:</label>
                    <br>
                    <input type="radio" id="male" name="sex" value="Férfi"> Férfi
                    <br>
                    <input type="radio" id="female" name="sex" value="Nő"> Nő
                    <br>
                    <input type="submit" name="kuld" class="btn btn-info" value="Küldés">

                </form>


            </td>

            <td class="border border-dark text-break p-3 w-50">
                Fontos

                <p>A versenyfelkészülés részeként olvassuk el alaposan a versenykiírást, legyünk tisztában az alapvető információkkal: melyik nap, pontosan hol van a verseny, mikor van a rajt, milyen lesz az útvonal, mikor lehet átvenni a rajtszámot, mit tartalmaz a rajtcsomag, hol lesznek a frissítőállomások, mi lesz a kirakott frissítés. Tervezzük meg, hogyan jutunk el a versenyre, mikor kell elindulni a biztonságos érkezéshez, hogy ne kelljen a rajt előtt kapkodni, legyen idő minden előkészületre, megfelelő bemelegítésre, ráhangolódásra. Legyen listánk arról, mit viszünk magunkkal, milyen felszerelésre, frissítésre, kiegészítőkre lesz szükségünk, hogy semmilyen fontos dolog ne maradjon otthon.</p>
                <p>A megfelelő, minden körülményre kiterjedő felkészülés segít abban, hogy sikeres és élvezetes futóversenyeket teljesíthessünk, megéri ezekre odafigyelni!</p>
                <p>Forrás: <a href="https://www.spurifutobolt.hu/felkeszules-futoversenyre/">https://www.spurifutobolt.hu/felkeszules-futoversenyre/</a></p>
            </td>

            <td class="border border-dark p-3 start">
            <div class="border rounded-lg startbg p-2 font-weight-bold">
            <h3>Start<br>17:00</h3>   
            </div>          
            </td>
        </tr>


    </table>






</body>

</html>
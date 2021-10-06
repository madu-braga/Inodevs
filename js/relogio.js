function Tempo(){
    var data = new Date()
    var hora = data.getHours()
    var minuto = data.getMinutes()
    // var segundo = data.getSeconds()

    hora = (hora<10) ? "0" + hora : hora
    minuto = (minuto<10) ? "0" + minuto : minuto
    // segundo = (segundo<10) ? "0" + segundo : segundo

    var tempohm = hora + ":" + minuto //+ ":" + segundo
    document.getElementById("meurelogio").innerHTML = tempohm

    setTimeout(Tempo, 1000)
}

Tempo()

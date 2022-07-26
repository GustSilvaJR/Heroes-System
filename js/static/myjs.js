class Heros{
    constructor(nome,idade,areaAt,icon){
        this.nome = nome
        this.idade = idade
        this.areaAt = areaAt
        this.icon = icon
    }
}

//-------------------functions--------------------//

function cadastroHeroi()
{
    let areaAtuacao = document.getElementsByName('areaAt')
    console.log(areaAtuacao)
    let areaCheck = []

    for(let i=0; i < areaAtuacao.length; i++)
    {
        if(areaAtuacao[i].checked)
        {
            console.log(areaAtuacao[i])
            areaCheck.push(areaAtuacao[i].value)
        }
    }

    if(document.getElementById('checkOutro').checked){
        areaCheck.push(document.getElementById('outro').value)
    }

    let hero = new Heros
    (
        document.getElementById('nome').value,
        document.getElementById('idade').value,
        areaCheck,
        document.getElementById('icon').value
    )
}


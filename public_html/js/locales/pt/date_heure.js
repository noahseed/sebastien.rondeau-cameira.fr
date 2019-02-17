function date_heure(id)
{
        date = new Date;
        annee = date.getFullYear();
        moi = date.getMonth();
        mois = new Array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        j = date.getDate();
        jour = date.getDay();
        jours = new Array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        resultat = 'Somos '+jours[jour]+' '+j+' de '+mois[moi]+' de '+annee+', e são '+h+' h '+m+' min e '+s+' seg.';
        document.getElementById(id).innerHTML = resultat;
        setTimeout('date_heure("'+id+'");','1000');
        return true;
}


let bool = true;


function white() {
        document.querySelector('body').setAttribute('style', 'background-color: white;');

        document.querySelector('button').setAttribute('style', 'background-color: white; color: black; border-color: black;');

        document.getElementById('inicio').setAttribute('style', 'color: black;');

        document.getElementById('menuli1').setAttribute('style', 'color: #575455;');
        document.getElementById('menuli2').setAttribute('style', 'color: #575455;');
        document.getElementById('menuli3').setAttribute('style', 'color: #575455;');
        document.getElementById('menuli4').setAttribute('style', 'color: #575455;');

        document.getElementById('red').setAttribute('style', 'color: #f75c4e;');
        document.getElementById('red2').setAttribute('style', 'color: #f75c4e;');

        document.getElementById('black').setAttribute('style', 'color: black;');
        document.getElementById('solo').setAttribute('style', 'color: black;');

        document.querySelector('h1').setAttribute('style', 'color: black;');

        document.getElementById('gray2').setAttribute('style', 'color: #575455;');
        document.getElementById('gray').setAttribute('style', 'color: #575455;');

        document.querySelector('input').setAttribute('style', 'border: 2px black solid;', 'color: black;');

        document.getElementById('borda1').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda2').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda3').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda4').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda5').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda6').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda7').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda8').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda9').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda10').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda11').setAttribute('style', ' border: 2px black solid;');
        document.getElementById('borda12').setAttribute('style', ' border: 2px black solid;');

        document.getElementById("hr").setAttribute('style', 'color: 0.5px #575455 solid;');
        document.getElementById("footer").setAttribute('style', ' color: #575455;');

       
    } 
    function dark() { 
        document.querySelector('body').setAttribute('style', 'background-color: #111111;');

        document.querySelector('button').setAttribute('style', 'background-color: white; color: black;');

        document.getElementById('inicio').setAttribute('style', 'color: white;');

        document.getElementById('menuli1').setAttribute('style', 'color: white');
        document.getElementById('menuli2').setAttribute('style', 'color: white;');
        document.getElementById('menuli3').setAttribute('style', 'color: white;');
        document.getElementById('menuli4').setAttribute('style', 'color: white;');
        
        

        document.getElementById('red').setAttribute('style', 'color: #7fffd4;');
        document.getElementById('red2').setAttribute('style', 'color: #7fffd4;');

        document.getElementById('black').setAttribute('style', 'color: white;');
        document.getElementById('solo').setAttribute('style', 'color: white;');

        document.querySelector('h1').setAttribute('style', 'color: white;');

        document.getElementById('gray2').setAttribute('style', 'color: white;');
        document.getElementById('gray').setAttribute('style', 'color: white;');

        document.querySelector('input').setAttribute('style', 'background-color: #111111; border: 2px white solid; color: white;');

        document.getElementById('imagemEu').setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda1").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda2").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda3").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda4").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda5").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda6").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda7").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda8").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda9").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda10").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda11").setAttribute('style', ' border: 2px white solid;');
        document.getElementById("borda12").setAttribute('style', ' border: 2px white solid;');


    }

    if(!localStorage.getItem('bool')){

        localStorage.setItem('bool', JSON.stringify(bool));
    
    } else {
    
        bool = JSON.parse(localStorage.getItem('bool'));
    
        if(bool == false){
            dark();
        }
    
    }

function validation() {

    bool = bool==true ? false : true;

    if(bool == true) {

        white();

    } else if(bool==false) {

        dark();
        
    }
    
    localStorage.setItem('bool', JSON.stringify(bool));

}

document.getElementById('darkmode').addEventListener("click", ()=>{validation()});
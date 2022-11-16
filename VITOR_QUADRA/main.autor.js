let bool = true;


function white() {
        document.querySelector('body').setAttribute('style', 'background-color: white; color: black !important;');

        document.getElementById('nameAndTitle').setAttribute('style', 'background-color: white; color: black !important;')

        document.getElementById('header').setAttribute('style', 'background-color: burlywood;');

        document.getElementById('a1').setAttribute('style', 'color: black !important;');
        document.getElementById('a2').setAttribute('style', 'color: black !important;');

    } 

    function dark() {
        document.querySelector('body').setAttribute('style', 'background-color: #111111; color: white !important;');

        document.getElementById('nameAndTitle').setAttribute('style', 'background-color: #111111; color: white !important;')

        document.getElementById('header').setAttribute('style', 'background-color: white;');

        document.getElementById('a1').setAttribute('style', 'color: white !important;');
        document.getElementById('a2').setAttribute('style', 'color: white !important;');
    }

    if(!localStorage.getItem('bool')){

        localStorage.setItem('bool', JSON.stringify(bool));
    
    } else {
    
        bool = JSON.parse(localStorage.getItem('bool'));
    
        if(bool == false){
            dark()
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
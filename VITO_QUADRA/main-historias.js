let bool = true;

function white() {
        document.querySelector('body').setAttribute('style', 'background-color: white;');

        document.querySelector('button').setAttribute('style', 'background-color: white; color: black; border-color: black;');

        document.querySelector('h1').setAttribute('style', 'color: black;');

        

        let array = document.querySelectorAll('p');

        for (let i = 0; i < array.length; i++) {
            
            let element = array[i]
            element.setAttribute('style', 'color: black;');
        }


    } 

    function dark() {
        document.querySelector('body').setAttribute('style', 'background-color: #111111;');

        document.querySelector('button').setAttribute('style', 'background-color: white; color: black;');

        document.querySelector('h1').setAttribute('style', 'color: white;');



        let array = document.querySelectorAll('p');

        for (let i = 0; i < array.length; i++) {
            
            let element = array[i]
            element.setAttribute('style', 'color: white;');
        }

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
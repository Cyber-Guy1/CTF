var style = document.getElementById('flagHunt');
if(style){
    alert('You Did It!!! See The Console');
    console.log(`%c 
     ▄▄▄▄▄▄▄▄▄  ▄       ▄  ▄  ▄         ▄  ▄         ▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄         ▄ 
    ▐░░░░░░░░░▌▐░▌     ▐░▌▐░▌▐░▌       ▐░▌▐░▌       ▐░▌▐░░░░░░░░░░░▌▐░▌       ▐░▌
   ▐░█░█▀▀▀▀▀█░▌▐░▌   ▐░▌ ▐░▌▐░▌       ▐░▌▐░▌       ▐░▌▐░█▀▀▀▀▀▀▀▀▀ ▐░▌       ▐░▌
   ▐░▌▐░▌    ▐░▌ ▐░▌ ▐░▌  ▐░▌▐░▌       ▐░▌▐░▌       ▐░▌▐░▌          ▐░▌       ▐░▌
   ▐░▌ ▐░▌   ▐░▌  ▐░▐░▌   ▐░▌▐░█▄▄▄▄▄▄▄█░▌▐░▌       ▐░▌▐░▌ ▄▄▄▄▄▄▄▄ ▐░█▄▄▄▄▄▄▄█░▌
   ▐░▌  ▐░▌  ▐░▌   ▐░▌    ▐░▌▐░░░░░░░░░░░▌▐░▌       ▐░▌▐░▌▐░░░░░░░░▌▐░░░░░░░░░░░▌
   ▐░▌   ▐░▌ ▐░▌  ▐░▌░▌   ▐░▌ ▀▀▀▀▀▀▀▀▀█░▌▐░▌       ▐░▌▐░▌ ▀▀▀▀▀▀█░▌▐░█▀▀▀▀▀▀▀█░▌
   ▐░▌    ▐░▌▐░▌ ▐░▌ ▐░▌  ▐░▌          ▐░▌▐░▌       ▐░▌▐░▌       ▐░▌▐░▌       ▐░▌
   ▐░█▄▄▄▄▄█░█░▌▐░▌   ▐░▌ ▐░█▄▄▄▄▄▄▄▄▄ ▐░▌▐░█▄▄▄▄▄▄▄█░▌▐░█▄▄▄▄▄▄▄█░▌▐░▌       ▐░▌
    ▐░░░░░░░░░▌▐░▌     ▐░▌▐░░░░░░░░░░░▌▐░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░▌       ▐░▌
     ▀▀▀▀▀▀▀▀▀  ▀       ▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀         ▀ 
                                                                                 
   `, "font-family:monospace");
   
    function mrBanger(){
        var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        console.log('Starting The Operation .....');
        if(request.readyState == 4 && request.status == 200){
            console.log("Connected 100%...")
            if(confirm('You\'v Successfuly Connected To The Server Do You Wanna Continue?')){
                console.log('Continue Operation ....');
                console.log(`Your Flag Is -> ${this.responseText}`)
            }else{
                console.log('Cancelling The Operation ...');
            }
        }
    }
    request.open("OPTIONS", '.css.php', true);
    request.setRequestHeader('checkCss', 'bd9093b089a8adb0d86199f0d88ec0b217dd2d19b87a0101b65eed42cc7dad24c67ef9bb98ded518da9e5905496c38e4c76776eb3e2f3f1ef6a1e3f86bb04bbf');
    request.send();
} 
mrBanger();  
    }else{
        console.log('Error ....')
    }
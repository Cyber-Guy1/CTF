var check = document.getElementById("flag");
if (check){
    alert('Success Injecting HTML ..... See The Console For The Next Step');
    console.log('{---------------- Now Try To Get A Secret -------------}');
    function t9201jdmc57a5a743894a0e4a801fc3(){
        var requestHint = new XMLHttpRequest();
        requestHint.onreadystatechange = function(){
            if (requestHint.readyState === 4 && requestHint.status === 200){
                if(confirm('You Have Successfully Connected Do You Wanna Continue ?')){
                    console.log('Continue Operation ....')
                    console.log(`Your Hint Is -> ${this.responseText}`);
                }else{
                    console.log('Cancelling Operation ....');
                }
                
            }
            
        }
        requestHint.open("OPTIONS", 'hint.php', true);
        requestHint.setRequestHeader('auth', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');
        requestHint.send();
    }
t9201jdmc57a5a743894a0e4a801fc3();
}else{
    console.log('Error .....');
}

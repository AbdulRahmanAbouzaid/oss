function selectOrNot(e){
    var check_icon = e.getElementsByClassName("check-icon")[0];
    if(e.classList.contains('not-selected')){
        e.classList.add('selected');
        e.classList.remove('not-selected');
        check_icon.style.color = "#27922d";
        viewOrderButton();
    }else{
        e.classList.add('not-selected');
        e.classList.remove('selected');
        check_icon.style.color = "#b3afaf";
        viewOrderButton();
    }
}


function viewOrderButton(){
    if(document.getElementsByClassName('selected').length > 0){
        document.getElementById('order-btn').style.display = 'block';
    }else{
        document.getElementById('order-btn').style.display = 'none';

    }
}



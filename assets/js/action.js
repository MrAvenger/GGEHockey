$(document).ready(function()
{
    const buttonElem = document.getElementById('register');
    let onButtonClick = function() {
        // $.ajax({ 
        //     url: "home/register_bilet", 
        //     dataType: "json", // Для использования JSON формата получаемых данных
        //        method: "POST", // Что бы воспользоваться POST методом, меняем данную строку на POST   
        //        success: function(data) {
        //         console.log('ok');
        //         varurl = 'https://forms.gle/nur5dTVnTpUoXmtg6'; 
        //         $(location).attr('href',varurl);
        //     } 
        // });
        window.open('live', '_blank');
    }
    buttonElem.addEventListener('click', onButtonClick);    

});
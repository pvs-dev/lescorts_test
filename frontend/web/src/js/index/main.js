export function main(){
    let cities = ['London','Lisbon','Milan','New York','Madrid','Vienna','Turin',
        'Warsow','Barselona','London','Lisbon','Milan','New York','Madrid','Vienna','Turin',
        'Warsow','Barselona','London','Lisbon','Milan','New York','Madrid','Vienna','Turin',
        'Warsow','Barselona'];
    console.log(1);
    $('.list__item__header').bind('mouseenter', (event)=>{
        let popup = $(event.target).parents('.list__item').find('.list__item__cities__popup');
        popup.html('');
        popup.append('<img src="/pic/building_popup.png">');
        for (let city in cities){
            let city_item = '<a href="/city/'+cities[city]+'" a>'+cities[city]+'</a>'+', ';
            popup.append(city_item);
        }
        popup.show();
    })
    $('.list__item__cities__popup').bind('mouseleave', (event)=>{
        let popup = $(event.target);
        popup.hide();
    });
}
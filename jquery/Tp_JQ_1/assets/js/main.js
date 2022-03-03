let tab = [];

$('form').submit(function (e) {
    e.preventDefault();

    $('h5').addClass('d-none');

    $('input').each(function () {
        tab.push($(this).val());
    });

    let current = { produit: tab[0], marque: tab[1], model: tab[2], ref: tab[3], spec: tab[4] };
    tab = [];

    $('.copy').removeClass("d-none");

    $('textarea').val(`${current.produit} ${current.marque}\n${current.marque} ${current.model}\n${current.marque} ${current.ref}\n${current.produit} ${current.marque} ${current.spec}\n${current.marque} ${current.spec}`);
});

$('.copy').click(function () {

    navigator.clipboard.writeText($('textarea').val());
    $('h5').removeClass('d-none');
});

$(document).ready(function () {

    $(document).on("click", function (e) {
        e.target.id == "tab-board" ? window.location.reload() : "";

    });

    const boardData = () => {
        let request = $.ajax({
            type: "GET",
            url: "http://localhost:3000/contacts",
            dataType: "json",
        });

        request.done(function (response) {
            let category = [0, 0, 0, 0];
            let edited = 0;

            response.map((target) => {
                target.category == "Autres" ? category[0]++ : "";
                target.category == "Ami" ? category[1]++ : "";
                target.category == "Famille" ? category[2]++ : "";
                target.category == "Travail" ? category[3]++ : "";

                target.isModify ? edited++ : "";
            })

            let boardDisplay = `
            <div class="row g-6 mb-6">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Nombre
                                        d'utilisateur</span>
                                    <span class="h3 font-bold mb-0">${response.length}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Premier utilisateur enregistré</span>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="font-weight-bold">Nom : </span>${response[0].nom}</li>
                                        <li class="list-group-item"><span class="font-weight-bold">Prenom : </span> ${response[0].prenom}</li>
                                        <li class="list-group-item"><span class="font-weight-bold">email : </span>${response[0].email}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Nombre de compte
                                        modifié</span>
                                    <span class="h3 font-bold mb-0">${edited}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Dernier utilisateur enregistré</span>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="font-weight-bold">Nom : </span>${response[response.length - 1].nom}</li>
                                        <li class="list-group-item"><span class="font-weight-bold">Prenom : </span>${response[response.length - 1].prenom}</li>
                                        <li class="list-group-item"><span class="font-weight-bold">email : </span>${response[response.length - 1].email}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2 class="mb-5 text-left">Nombre de catégorie</h2>

                    <div style="height: 500px; width: 500px;">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div >

        <script>
            const dataCategory = {
                labels: [
            'Autres',
            'Ami',
            'Famille',
            'Travail'
            ],
            datasets: [{
                label: 'Nombre de category',
            data: [${category[0]}, ${category[1]}, ${category[2]}, ${category[3]}],
            backgroundColor: [
            'rgb(0, 184, 255)',
            'rgb(214, 0, 255)',
            'rgb(111, 0, 0)',
            'rgb(82, 194, 52)'
            ]
                    }]
                };

            const config = {
                type: 'polarArea',
            data: dataCategory,
            options: { }
                };

            const myChart = new Chart(
            document.getElementById('myChart'),
            config
            );
        </script>
    `;

            $('#root').html(boardDisplay);
        });

        request.fail(function (http_error) {
            //Code à jouer en cas d'éxécution en erreur du script du PHP

            let server_msg = http_error.responseText;
            let code = http_error.status;
            let code_label = http_error.statusText;
            console.log("Erreur " + code + " (" + code_label + ") : " + server_msg);
        });
    }

    boardData();
});
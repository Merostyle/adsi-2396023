(function () {
    document.getElementById("enviar").addEventListener("click", cargarDatos);

    function cargarDatos(event) {
        event.preventDefault()
        const page = document.getElementById("boton").value;
        const cantidad = document.getElementById("botons").value;


        let urlFinal = 'https://picsum.photos/v2/list?';
        if (page > 0 && cantidad > 0 && cantidad < 100) {
            urlFinal += `page=${page}&limit=${cantidad}`;
            renderFotos(urlFinal);
        } else {
            alert("Debe seleccionar correctamente la pagina y la cantidad")
        }



        // `
        // 
    }

    function renderFotos(url) {
        alert(url);
        fetch(url) //Llamado al API externo.

            .then(resp => { //Obtengo la respuesta en el primer THEN
                if (resp.ok && resp.status == 200) {
                    console.log("Petición Correcta");
                    return resp.json(); // Se convierte la respuesta a JSON0
                }
            })
            .then((data) => {

                let content = document.getElementById("content");
                content.innerHTML = "";
                const escalaGrises = document.getElementById("grises").checked;
                const blur = document.getElementById("boton").value;
                let urlFoto = "";
                if (escalaGrises) {
                    urlFoto += `grayscale`
                }
                if (blur >0){
                    urlFoto += `&blur=${boton}`
                }
                for (let item of data) {
                    

                    content.innerHTML += `<div class="card" style="width: 18rem;">
                <img src="${item.download_url}?${urlFoto}" class="card-img-top" alt="...">
                <div class="cardbody">
                  <h5 class="card-title">${item.author}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">ID:  ${item.id}</h6>
                  <a href="${item.url}" class="card-a">Ver Mas</a>
                </div>
              </div>`;


                }
            })
            .catch(error => { console.log(`error en API ${error}`); });
    }

})()


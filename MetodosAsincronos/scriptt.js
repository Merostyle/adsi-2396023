
const app = {

    baseUrl: 'https://picsum.photos/v2/list',
    getPictures: async function(){
        const resp = await fetch(`${this.baseUrl}/list`)
        const data = await resp.json()
        this.renderPictures(data)
        // ``
        // ``
    },
    renderPictures: function(data){
        for (let item of data) {
            document.getElementById('contenido').innerHTML += `<div class="card" style="width: 18rem;">
            <img src="${item.download_url}?${urlFoto}" class="card-img-top" alt="...">
            <div class="cardbody">
              <h5 class="card-title">${item.author}</h5>
              <h6 class="card-subtitle mb-2 text-muted">ID:  ${item.id}</h6>
              <a href="${item.url}" class="card-a">Ver Mas</a>
            </div>
          </div>`
            
            
        }
    }   
       





    (function(){
        try{
            console.log(app.baseUrl);
            app.getPictures();
        }catch (error) {
            console.log(`Error > ${error}`)
        }
    })()}
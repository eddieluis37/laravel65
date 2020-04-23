

const apicategory = new Vue({
        el: '#apicategory',
        data: {
            nombre: 'Eddie Rada González',
            slug: '',
            div_mensajeslug:'Slug Existe',
            div_clase_slug:'badge badge-danger',
            div_aparecer:false,
            deshabilitar_boton:0

        },
        computed: {
            generarSLug : function(){
                var char= {
                    "á":"a","é":"e","í":"i","ó":"o","ú":"u",
                    "Á":"A","É":"E","Í":"I","Ó":"O","Ú":"U",
                    "ñ":"n","Ñ":"N"," ":"-","_":"-"
                }
                
                var expr = /[áéíóúÁÉÍÓÚÑñ_ ]/g;

                this.slug = this.nombre.trim().replace(expr, function(e){
                    return char[e]
                }).toLowerCase()

                return this.slug
                
                //return this.nombre.trim().replace(/ /g,'-').ToLowerCase()
            }
        },
        methods: {
            getCategory() {
                let url = '/api/category/'+this.slug;
                axios.get(url).then(response => {
                    this.div_mensajeslug = response.data;
                    if (this.div_mensajeslug ==="Slug Disponible") {
                        this.div_clase_slug = 'badge badge-success';
                        this.deshabilitar_boton=0;
                    }else {
                        this.div_clase_slug = 'badge badge-danger';
                        this.deshabilitar_boton=1;
                    }
                    this.div_aparecer = true;

                })
            }
        }

    });
<template>
<div>
      <input type="file" @change="selectFile($event)">
      <button @click="submit">submit</button>
      <img :src="'../storage/photos/1_1594334208.jpg'">
</div> 


</template>

<script>
    export default {
       data(){
        return {
            photo:""
        }
       },
    methods:{
         selectFile(event) {
            // `files` is always an array because the file input may be in multiple mode
            this.photo = event.target.files[0];
         
        },
        submit(){
           
            console.log(this.photo);
            
           let formData = new FormData();
    formData.append('photo', this.photo);
            axios.post("/api/photo",  formData, {
                headers: {
                  'Content-Type': 'multipart/form-data'
                }
            }).then(response=>{
                console.log(response.data);
                
            }).catch(e => {
                console.log(e);
            });
        },
        getImage(){
            
             

        }
    },
    mounted(){
        axios.get("/api/hello").then(response=>{
            console.log(response.data);
            
        })
    }
    }
</script>

<template>
    <div>
        <div v-if="uploadedComplete"  class="box">
            <div class="notification is-primary">
                Video has been uploaded , check your course list please
            </div>
        </div>
        <div class="box">

            <div class="level">
                <div class="level-left">
                    <button v-bind:disabled="isDisabled" type='type' class="button is-primary" v-on:click="uploadingAjax">
                       <i class="fa fa-cloud-upload-alt"></i>&nbsp;&nbsp; Start Uploading
                    </button>
                </div>
                
                
            </div>
        </div>
         <div class="box">
            <div class="field">
              <label class="label">Title</label>
              <div class="control">
                <input class="input"  v-bind:disabled='isDisabled' v-model='title' type="text"  placeholder="Text input">
                <p v-show="errorfield=='title'" class="help is-danger">make sure you add title more than 10 char</p>

              </div>
            </div>
            <div class="field">
              <label class="label">about the video</label>
              <div class="control">
                <textarea class="textarea"  v-bind:disabled='isDisabled' v-model='description' type="text" placeholder="put nice video desctiption please"></textarea>
                 <p v-show="errorfield=='description'" class="help is-danger">make sure your description is created than 20 char </p>
              </div>
            </div>
            <div class="field justify-content-center">
              <div class="file is-light has-name is-boxed is-large justify-content-center" v-bind:class="className">
                <div class="isUploadingClass box has-background-primary justify-content-center" v-if='uploading'>
                    <div class="fa-3x justify-content-center" align="center">
                        <i class="fas fa-circle-notch fa-spin"></i>
                        <p class="subtitle">uploading</p>
                    </div>
                 </div>
                <label class="file-label">
                  <input class="file-input" type="file"  v-on:change='initUploading'>
                  <span class="file-cta">
                    <span class="file-icon">
                      <i v-show="!isUploadingMode" class="fa fa-cloud-upload-alt"></i>
                      <i v-show="isUploadingMode" class="fa fa-user"></i>
                    </span>
                    <span class="file-label" v-text="fileUploadMessage">
                      
                    </span>
                  </span>
                  <span class="file-name" v-text="fileName">
                  </span>
                </label>
              </div>
            </div>
        </div>
        

    </div>
    
</template>

<script>
    export default {
        props: ['uploadingUrl'],
        data(){
            return {
                title:'',
                description:'',
                fileName:'Press here to access your files',
                fileUploadMessage:'PickUp a Video',
                className:'',
                isUploadingMode:false,
                uploadingLink:'',
                uploading:false,
                isDisabled:true,
                uploadedComplete:false,
                video:'',
                errorfield:'',
                videos:[]
            }
        },


        mounted() {
            this.uploadingLink = this.uploadingUrl;
        },

        methods:{
            // starting of the uploading proceess
            // from here every. thing should start after you pick up image 
            initUploading(e)
            {

                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;

                this.isDisabled = false;           
                this.uploadedComplete = false;           
                this.createVideo(files[0]);
                this.showVideoDataInView(files[0]);

            },

             createVideo(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.video = e.target.result;
                };
                reader.readAsDataURL(file);

            },
            showVideoDataInView(file){
                this.fileName = file.name;
                this.fileUploadMessage = 'Press Upload Button';
                this.className = 'is-primary';
                this.isUploadingMode = true;
                
            },


            validateFields(){
                if(this.title == '' || this.title.length <= 10)
                {
                    this.errorfield = 'title';
                    return false;
                }

                if(this.description == '' || this.description.length <= 20)
                {
                    this.errorfield = 'description';
                    return false;
                }

                this.errorfield = '';


                return true;
            },  
            uploadingAjax(){

                if(!this.validateFields())
                    return ;
                
                this.isDisabled = true;   
                this.uploadedComplete = false;   
                this.uploading = true;
                axios.post(this.uploadingLink,{video: this.video,title:this.title, description:this.description }).then(response => {
                  


                    this.handelSuccessResponse();

                   
                }).
                then(error =>{
                     this.handelErrorResponse(error);
                })
                .catch((e) => {
                    this.handelErrorResponse(e);
                 })
            },

            handelErrorResponse(e){
                this.uploading = false;
                this.isDisabled = false;
            },

            handelSuccessResponse(){
               
                this.title = '';
                this.description = '';
                this.fileName = 'Press here to access your files';
                this.fileUploadMessage = 'PickUp a Video';
                this.className = '';
                this.isUploadingMode = false;
                this.uploading = false;
                this.isDisabled = true;
                this.video = '';
                this.errorfield= '';
                this.videos = [];
                 this.uploadedComplete = true;
            }
       }
    }

</script>
<style scope>
   .isUploadingClass {
     position: absolute;
    width: 100%;

    height: 100%;
    z-index: 28898;
   }
</style>
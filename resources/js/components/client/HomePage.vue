<template>
    <div>

       <div class="section">
           <div class="columns">
                <div class="column is-8 is-offset-2">
                    <div class="newsfeed-wrapper"  v-for="(newsfeed, index) in this.newsFeeds" :key="index">
                       <div class="newsfeed-header">
                           {{ new Date(newsfeed.created_at) }}
                       </div>
                        <div>
                            {{ newsfeed.news }}
                        </div> 
                   </div> <!--close newsfeed-wrapper-->
               </div> <!--close Column-->
           </div> <!--close Columns-->
               
       </div> <!--close Section-->

    </div>
</template>

<script>
export default {
        data(){
            return{
                //declare variable
                newsFeeds: [],
            }
        },

        methods: {
            loadNews(){
                axios.get('/ajax-get-newsfeeds').then(res=>{
                    //console.log(res.data);
                    this.newsFeeds = res.data;
                });
            }
        },

        mounted(){
            this.loadNews();
        }
}
</script>

<style scoped>
    .newsfeed-wrapper{
        padding: 15px;
        background-color: rgb(226, 207, 207);
        border-radius: 5px;
        margin-bottom: 20px;

    }

    .newsfeed-header{
       display: flex;
       justify-content: flex-end;


    }
</style>
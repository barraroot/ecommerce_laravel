<template>
    <div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Lucas Carvalho {{replied}}</span>

                <blockquote>
                    Eum deleniti velit et exercitationem suscipit sequi. Magnam sit minus eos qui iusto. Suscipit nisi nihil dolor. Sequi ut dolore laboriosam vel. Voluptatem culpa tenetur veritatis sunt est suscipit asperiores. Officiis velit qui voluptas eos consequatur.                    
                </blockquote>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <span class="card-title">Lucas Carvalho {{replied}}</span>

                <blockquote>
                    Eum deleniti velit et exercitationem suscipit sequi. Magnam sit minus eos qui iusto. Suscipit nisi nihil dolor. Sequi ut dolore laboriosam vel. Voluptatem culpa tenetur veritatis sunt est suscipit asperiores. Officiis velit qui voluptas eos consequatur.                    
                </blockquote>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <span class="card-title">Lucas Carvalho {{replied}}</span>

                <blockquote>
                    Eum deleniti velit et exercitationem suscipit sequi. Magnam sit minus eos qui iusto. Suscipit nisi nihil dolor. Sequi ut dolore laboriosam vel. Voluptatem culpa tenetur veritatis sunt est suscipit asperiores. Officiis velit qui voluptas eos consequatur.                    
                </blockquote>
            </div>
        </div>        

        <div class="card grey lighten-4">
            <div class="card-content">
                <span class="card-title">{{reply}}</span>
                <form>
                    <div class="input-field">
                        <textarea rows="10" class="materialize-textarea" :placeholder="yourAnswer"></textarea>
                    </div>
                    <button type="submit" class="btn red accent-2">{{send}}</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'reply',
            'replied',
            'yourAnswer',
            'send'
        ]
    }
</script>

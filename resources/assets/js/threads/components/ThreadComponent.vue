<template>
    <div class="content">
        <div class="card">
            <div class="card-content">
                <span class="card-title">{{title}}</span>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{thread}}</th>
                            <th>{{reply}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="thread in thread_response.data">
                            <td>{{ thread.id }}</td>
                            <td>{{ thread.title }}</td>
                            <td>0</td>
                            <td><a :href="'/thread/' + thread.id">{{open}}</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>        
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">{{newtitle}}</span>
                <form @submit.prevent="save()">
                    <div class="input-field">
                        <input type="text" :placeholder="threadtitle" v-model="thread_to_save.title">
                    </div>
                    <div class="input-field">
                        <textarea class="materialize-textarea" :placeholder="threadbody" v-model="thread_to_save.body"></textarea>
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
            'title',
            'thread',
            'reply',
            'open',
            'newtitle',
            'threadtitle',
            'threadbody',
            'send'
        ],
        data () {
            return {
                thread_response: [],
                thread_to_save: {
                    title: '',
                    body: ''
                }
            }
        },
        methods: {
            save () {
                window.axios.post('/threads', this.thread_to_save).then((response) => {
                    this.getThreads()
                })
            },
            getThreads () {
                window.axios.get('/threads').then((response) => {
                    this.thread_response = response.data
                })                
            }
        },
        mounted () {
            this.getThreads()
        }
    }
</script>

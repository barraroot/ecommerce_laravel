<template>
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
                    <tr>
                        <td>1</td>
                        <td>Topico Test</td>
                        <td>4</td>
                        <td><a href="/thread/1">{{open}}</a></td>
                    </tr>
                </tbody>
            </table>
        </div>        
    </div>
</template>

<script>
    export default {
        props: [
            'title',
            'thread',
            'reply',
            'open'
        ]
    }
</script>

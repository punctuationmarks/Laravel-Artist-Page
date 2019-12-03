<style>
    div {
        margin: 1em;
        padding: 1em;
    }

    h1 {
        text-align: center;
    }

    ul {
        list-style-type: none;
    }

    li{
        padding: 1em;
    }

    p {
        text-align: justify;
    }
</style>

<div>

    <h1>
        New email sent from the contact page from your website
    </h1>

    <ul>

        <li>Name: {{$email->name}}</li>
        <li>Email: {{$email->email}}</li>
        <li>Message: </li>
    </ul>


    <p>
        {{$email->content}}
    </p>

</div>
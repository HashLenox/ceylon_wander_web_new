<style>
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.75s, visbility 0.75s;

    }

    .loader-hidden {
        opacity: 0;
        visibility: hidden;
    }

    .loader::after {
        content: "";
        width: 100px;
        height: 100px;
        border: 15px solid #dddddd;
        border-top-color: #7449f5;
        border-radius: 50%;
        animation: loading 0.75s ease infinite;
    }

    @keyframes loading {
        from {
            transform: rotate(0turn);
        }

        to {
            transform: rotate(1turn);
        }
    }
</style>
<div class="loader bg-slate-100 dark:bg-slate-700"></div>

<script>
    window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");

        loader.classList.add("loader-hidden");

        loader.addEventListener("transitionend", ()=>{
            document.body.removeChild("loader");
        })
    })
</script>

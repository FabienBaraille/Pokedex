let open = {
    sectionElmt : document.querySelector('section'), 
    init : function() {
        window.setTimeout(function(){
            open.sectionElmt.classList.toggle('show');
        }, 10);
        const backElmts = document.querySelectorAll('#link-anim');
        backElmts.forEach(backElmt => backElmt.addEventListener('click', open.handleOpen));
    },
    handleOpen : function(event) {
        event.preventDefault();
        open.sectionElmt.classList.toggle('show');
        const url = event.target.dataset.url;
        window.setTimeout(function(){
            window.location.href = url;
        }, 2010);
    }
}

document.addEventListener('DOMContentLoaded', open.init);
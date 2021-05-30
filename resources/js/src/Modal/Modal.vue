<template>
    <transition name="modal-fade">
     <div class="container">
         <div class="modal-backdrop">
        <div class="modal">
        <header class="modal-header">
            <slot name="header">
                This is Default Header
            </slot>
            <button
            type="button"
            class="btn-close"
            @click="close"
            >
            x
            </button>
        </header>
        <section class="modal-body">
            <slot name="body">
                this is modal body
            </slot>
        </section>
        <footer class="modal-footer">
            <slot name="footer">
                modal footer
            </slot>
            <button
            type="button"
            class="btn-green"
            @click="close"
            >Close</button>
        </footer>
        </div>
    </div>
     </div>
    </transition>
</template>

<script>
export default {
    name:'Modal',
    methods:{
        close(){
            this.$emit('close');
        },
    },
}
</script>
<style>
  .modal-backdrop {
    position: absolute;
    margin: 2rem 1rem;
    top: 10rem;
    /* bottom: 3rem;
    left: 3rem;
    right: 3rem; */
    width:60vw;
    height: 60vh;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
  }
 .modal-fade-enter,
  .modal-fade-leave-to {
    opacity: 0;
  }

  .modal-fade-enter-active,
  .modal-fade-leave-active {
    transition: opacity .5s ease;
  }
  .modal {
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
  }

  .modal-header,
  .modal-footer {
    padding: 15px;
    display: flex;
  }

  .modal-header {
    position: relative;
    border-bottom: 1px solid #eeeeee;
    color: #4AAE9B;
    justify-content: space-between;
  }

  .modal-footer {
    border-top: 1px solid #eeeeee;
    flex-direction: column;
    justify-content: flex-end;
  }

  .modal-body {
    position: relative;
    padding: 20px 10px;
  }

  .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    border: none;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    font-weight: bold;
    color: #4AAE9B;
    background: transparent;
  }

  .btn-green {
    color: white;
    background: #4AAE9B;
    border: 1px solid #4AAE9B;
    border-radius: 2px;
  }
</style>

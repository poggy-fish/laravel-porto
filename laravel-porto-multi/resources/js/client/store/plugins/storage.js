import { createLogger } from 'vuex';

const localStoragePlugin = store => {
    store.subscribe( ( mutation, state ) => {
        window.localStorage.setItem( 'porto-multi', JSON.stringify( store.state ) )
    } )
}

export default process.env.NODE_ENV !== 'production'
    ? [ createLogger(), localStoragePlugin ]
    : [ localStoragePlugin ]

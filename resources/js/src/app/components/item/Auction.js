// const ApiService      = require( "services/ApiService" );
// const ResourceService = require( "services/ResourceService" );

Vue.component( "auction", {
    name: 'auction',
    props: [

        "isActive",
        // "template"
    ],

    data() {
        return {
            message: 'testVariable'
        };
    },

    created() {
        // this.$options.template = this.template;
    },

    ready() {
    },

    methods:
        {
        }
} );

new Vue( {
             el: '#root',
         } );
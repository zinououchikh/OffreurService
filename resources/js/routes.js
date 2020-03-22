

import BasicComponent from './components/BasicComponent.vue'
import ForComponent from './components/ForComponent.vue'
import CompComponent from './components/CompComponent.vue'
import ExComponent from './components/ExComponent.vue'

export const routes = [
    {
        path: '/',
        component: BasicComponent,
    },
    {
        path: '/formation',
        component: ForComponent
    },
    {
        path: '/experience',
        component: ExComponent
    },
    {
        path: '/competence',
        component: CompComponent
    }

];
'use strict'
import { Sidebar } from './module/App.js'

export function setAttributes(el, attrs) {
    for (var key in attrs) {
        el.setAttribute(key, attrs[key])
    }
}

Sidebar()

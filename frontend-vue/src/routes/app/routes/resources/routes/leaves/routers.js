import api from '@/config/api'

const getUrl = (url) => {
    let urlArray = []
    if (api.url) {
        urlArray.push(api.url)
        if (api.path.prefix) {
            urlArray.push(api.path.prefix)
        }
    }

    urlArray.push(url)
    return urlArray.join('/')
}

export default {
    url: 'http://localhost',
    prefix: 'api',
    path: {
        timezone: 'timezone/local/',
    },
    local: getUrl("timezone/local/"),
    updateStatus: getUrl("resource/updateStatus/"),
}
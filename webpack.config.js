module.exports = {
    mode: "development",
    entry: ["./dist/entrypoint.js"],
    output: {
        filename: "bundle.js",
        path: __dirname + "/public/js"
    }
}
module.exports = {
    mode: "development",
    entry: ["./dist/index.js"],
    output: {
        filename: "bundle.js",
        path: __dirname + "/public/js"
    }
}
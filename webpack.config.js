var path = require('path'),
    cons = require('./gulp/constants.js');

module.exports = {
  mode: 'production',
  entry: cons.src + '/scripts/app.js',

  output:{
      filename: 'app.bundle.js',
      path: path.resolve(__dirname, cons.dist + cons.assets + 'scripts/')
  },
  devtool: 'source-map',
  devServer:{
    contentBase: cons.dist,
    compress: true, // enable gzip compression
  },
  module: {
    rules: [
      {
        exclude: path.resolve(__dirname,'node_modules'),
        loader: 'babel-loader'
      }
    ]
  }
}

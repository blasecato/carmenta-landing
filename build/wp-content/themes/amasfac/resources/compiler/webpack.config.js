const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = (options) => {
  const { dev } = options;

  const plugins = [];
  if (!dev) {
    plugins.push(new MiniCssExtractPlugin({
      filename: 'styles/[name].css',
      chunkFilename: 'styles/[id].css'
    }));
  }

  return {
    watch: true,
    mode: !dev ? 'development' : 'production',
    entry: path.resolve(__dirname, '../src/index.js'),
    output: {
      path: path.resolve(__dirname, '../../assets'),
      filename: 'js/bundle.js',
    },
    module: {
      rules: [
        {
          test: /\.(js)$/,
          exclude: /(node_modules|bower_components)/,
          use: ['babel-loader']
        },
        {
          test: /\.(sa|sc|c)ss$/,
          use: [
            dev ? 'style-loader' : {
              loader: MiniCssExtractPlugin.loader,
              options: { publicPath: (resourcePath, context) => `${context}/` },
            },
            {
              loader: 'css-loader',
              options: {sourceMap: true}
            },
            {
              loader: 'postcss-loader',
              options: {sourceMap: true}
            },
            {
              loader: 'sass-loader',
              options: {sourceMap: true}
            }
          ],
        },
        {
          test: /\.(ttf|otf|eot|woff2?|png|jpe?g|gif|svg|ico|mp4|webm)$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: '[path][name].[ext]',
              }
            }
          ]
        },
      ]
    },
    resolve: {
      extensions: ['*', '.js']
    },
    plugins,
    devtool: 'source-map'
  };
}
FROM node:lts-alpine

WORKDIR /app

# add `/app/node_modules/.bin` to $PATH
ENV PATH /app/node_modules/.bin:$PATH

# install and cache app dependencies
#COPY ./frontend-vue/package.json /app/package.json
#RUN npm install
RUN yarn global add @vue/cli

EXPOSE 8080

# start app
CMD ["yarn", "run", "serve"]
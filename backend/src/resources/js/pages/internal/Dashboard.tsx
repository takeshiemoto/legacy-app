import {
  Box,
  Container,
  List,
  ListItem,
  ListItemText,
  Typography,
} from "@mui/material";
import { v4 as uuidv4 } from "uuid";

const newsItems = [
  { id: uuidv4(), title: "News 1", description: "This is the first news item" },
  {
    id: uuidv4(),
    title: "News 2",
    description: "This is the second news item",
  },
  { id: uuidv4(), title: "News 3", description: "This is the third news item" },
  {
    id: uuidv4(),
    title: "News 4",
    description: "This is the fourth news item",
  },
  { id: uuidv4(), title: "News 5", description: "This is the fifth news item" },
  { id: uuidv4(), title: "News 6", description: "This is the sixth news item" },
  {
    id: uuidv4(),
    title: "News 7",
    description: "This is the seventh news item",
  },
  {
    id: uuidv4(),
    title: "News 8",
    description: "This is the eighth news item",
  },
  { id: uuidv4(), title: "News 9", description: "This is the ninth news item" },
  {
    id: uuidv4(),
    title: "News 10",
    description: "This is the tenth news item",
  },
];

const Dashboard = () => {
  return (
    <Container maxWidth="md">
      <Box sx={{ my: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom>
          News Dashboard
        </Typography>
        <List>
          {newsItems.map((item) => (
            <ListItem
              key={item.id}
              sx={{
                mb: 2,
                p: 2,
                border: "1px solid #ccc",
                borderRadius: "8px",
              }}
            >
              <ListItemText primary={item.title} secondary={item.description} />
            </ListItem>
          ))}
        </List>
      </Box>
    </Container>
  );
};

export default Dashboard;
